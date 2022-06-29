const config = {
    responseType: 'text'
},

module.exports = {
    devServer: {
    proxy: ' 192.168.*.*', //your ip here (using localhost will retrive Cors errors)
    }
}
