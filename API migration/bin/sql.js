var jsonSql = require('json-sql')({
	separatedValues: false,
	dialect: 'mysql'
});

exports.insert = function(table, value){
	var sql = jsonSql.build({
		type: 'insert',
		table: table,
		values: value
	});

	return sql.query;
};

exports.select = function(table, select){
	var sql = jsonSql.build({
		type: 'select',
		fields: select,
		table: table
	});

	return sql.query;
};