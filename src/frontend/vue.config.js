module.exports = {
    devServer: {
        disableHostCheck: true,
        sockHost: 'frontend.manut.test',
        watchOptions: {
            ignored: /node_modules/,
            aggregateTimeout: 300,
            poll: 1000,
        }
    },
    pages: {
        index: {
          // entry for the page
          entry: 'src/main.js',
          title: 'Docker_Tutorial',
        },
    }
};