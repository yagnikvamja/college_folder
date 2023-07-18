import * as http from 'http'

const port = process.env.port || 3000;

const server = http.createServer((req, res) => {
    console.log(req.url);
    res.statusCode = 200;
    res.SetHeader('Content-Type', 'text/html')
    res.end('<h1>This is Node js</h1> <p>this is the http server..</p>')
});

server.listen(port, ()=> {
    console.log(`Server is running on port ${port}`);
});