var fl;
var jsReady = false; 
var callback = '';

function isReady() {
  return jsReady;
}
function init() {
  jsReady = true;
}
function get_request(msg, cb) {
  json = JSON.parse(msg);
  window[cb](json);
}
function send_request(msg, cb) {
  fl.send_msg(msg, cb);
}
function flash_ready() {
  console.log('connect');
  fl = swfobject.getObjectById('sct');
  connection();
}
function connection() {
  send_request('<connect csaid="1" csabuild="200509010" affiliateid="1" advertisementid="0" macaddress="12-23-34-45-56-67" internalip="111.222.333.444" internalhost="localhost"/>', 'socket_ready');
}
function socket_ready() {
  send_request('<objects><object name="api"><apgetprocesses subcategoryid="1"/></object></objects>', 'build_tables');
}
function build_tables(json) {
  console.log(json);
}
