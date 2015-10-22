/*
*	Database Handler for Node.js
*/

// Log the loading modules
console.log('Initializing modules.');

// Load Modules
var mysql = require('mysql'),
	fs = require('fs'),
	sql = require('./bin/sql');

console.log('Loading config file.');
var config = JSON.parse(fs.readFileSync('config.json'));

var status = {
	connected: false,
	connected2: false,
	qrows: null
};

var connection = mysql.createConnection(config.source.credentials);

var connection2 = mysql.createConnection(config.destiny.credentials);

// Connect to database with credentials loaded from config file
console.log('Connecting to \"%s\" database.', config.source.credentials.database);
connection.connect(function(err)
{
	if(err)
	{
		console.error('Error connecting to \"%s\", please make sure the config data is valid or that server is running and listening', config.source.credentials.database);
	}

	else
	{
		status.connected = true;

		console.log('Connected');
	}
});

// Make query to database and gather records
connection.query(sql.select(config.source.table, config.source.fields), function(err, rows, field)
{
	// Check if connection was made, in order to avoid errors if connection got an error
	if(status.connected)
	{		
		console.log('Gathering data from \"%s\"', config.source.table);
		
		if(err)
			throw err;

		else
		{
			console.log('%s rows found', rows.length);
			status.qrows = rows;
			connection.end();
			console.log('connection ended');
			status.connected = false;

			secondConnect();
		}
	}
});

function secondConnect()
{
	console.log('Connecting to %s', config.destiny.credentials.database);

	var rows = rename(status.qrows);
	
	// Wait 1s to make sure there is no open connection to the first database and then proceed
	setTimeout(function() {
		connection2.connect(function(err)
		{
			if(err)
				console.error('Error connecting to \"%s\", please make sure the config data is valid or that server is running and listening', config.destiny.credentials.database);

			else
			{
				status.connected2 = true;

				console.log('Connected to ', config.destiny.credentials.database);
			}
		});

		connection2.query(sql.insert(config.destiny.table, rows), function(err, result)
		{
			console.log(err, result);

			if(err)
				console.error('There was an error inserting data to the table');

			else
			{
				console.log('%s were affected', result.affectedRows)

				connection2.end();
				console.log('connection ended');
			}
		});

	}, 1000);
}

function rename(arr)
{
	var result = [];

	// Check every element in array
	for(e in arr)
	{
		var ob = {};

		// Check every property in object
		for(prop in arr[e])
		{
			var val = arr[e][prop],
				pro = change(prop, config.destiny.rename);

			ob[pro] = val;
		}

		result.push(ob);
	}

	return result;
}

function change(name, struct)
{
	// Check every property in object (target to destiny)
	for(prop in struct)
	{
		if(name == prop)
			return struct[prop];
	}

	return name;
}