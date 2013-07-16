$ = require('jQuery');
var fs = require('fs');
var file = __dirname + '/index.html';

function encode_utf8( s ){
	return decodeURIComponent(escape( s ) );
	//return unescape( encodeURIComponent( s ) );
}

fs.readFile(file, 'utf8', function (err, data) {
  var html = $(data);
  var input_items1 = html.find(".glyph .fs1");
  var input_items2 = html.find(".box1 span");
  var output_items = {};
  input_items1.each(function(i,d){
	var v = parseInt(escape($(d).attr('data-icon')).replace('%u','0x'));
	output_items[$(input_items2[i]).attr('class')] = v;
  });
  console.dir(output_items);
});
