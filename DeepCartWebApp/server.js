//Install express server
const express = require('express');
const path = require('path');

const app = express();

// Replace the '/dist/<to_your_project_name>'
app.use(express.static(__dirname + '/dist/DeepCartWebApp'));

app.get('*', function (req, res) {
    // Replace the '/dist/<to_your_project_name>/index.html'
    res.sendFile(path.join(__dirname + '/dist/DeepCartWebApp/index.html'));
});
// Start the app by listening on the default Heroku port
app.listen(process.env.PORT || 8080);