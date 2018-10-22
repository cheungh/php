### this example taken from 
# python doc
# 
from SimpleXMLRPCServer import SimpleXMLRPCServer
from SimpleXMLRPCServer import SimpleXMLRPCRequestHandler

# Restrict to a particular path.
class RequestHandler(SimpleXMLRPCRequestHandler):
    rpc_paths = ('/RPC2',)

# Create server
server = SimpleXMLRPCServer(("localhost", 8000),
                            requestHandler=RequestHandler)
server.register_introspection_functions()

# Register pow() function; this will use the value of
# pow.__name__ as the name, which is just 'pow'.
server.register_function(pow)

# Register a function under a different name
def adder_function(x,y):
    return x + y
server.register_function(adder_function, 'add')

# Register an instance; all the methods of the instance are
# published as XML-RPC methods (in this case, just 'div').
class MyFuncs:
    def div(self, x, y):
        return x // y

server.register_instance(MyFuncs())

# Run the server's main loop
server.serve_forever()

""" client call example
>>> proxy = xmlrpclib.ServerProxy('http://localhost:8000', verbose=True)
>>> proxy.pow(2,3)
send: "POST /RPC2 HTTP/1.1\r\nHost: localhost:8000\r\nAccept-Encoding: gzip\r\nUser-Agent: xmlrpclib.py/1.0.1 (by www.pythonware.com)\r\nContent-Type: text/xml\r\nContent-Length: 187\r\n\r\n<?xml version='1.0'?>\n<methodCall>\n<methodName>pow</methodName>\n<params>\n<param>\n<value><int>2</int></value>\n</param>\n<param>\n<value><int>3</int></value>\n</param>\n</params>\n</methodCall>\n"
reply: 'HTTP/1.0 200 OK\r\n'
header: Server: BaseHTTP/0.3 Python/2.7.14
header: Date: Sun, 21 Oct 2018 05:44:47 GMT
header: Content-type: text/xml
header: Content-length: 121
body: "<?xml version='1.0'?>\n<methodResponse>\n<params>\n<param>\n<value><int>8</int></value>\n</param>\n</params>\n</methodResponse>\n"
8
"""