const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const CopyPlugin = require('copy-webpack-plugin');

module.exports = {
    ...defaultConfig,
    devServer: {
        ...defaultConfig.devServer,
        host: 'wordpress.test',
    },
    plugins: [
        ...defaultConfig.plugins,
        new CopyPlugin({
            patterns: [
                { from: 'node_modules/shiki', to: 'shiki' },
                { from: 'src/fonts', to: 'fonts' },
            ],
        }),
    ],
    experiments: {
        asyncWebAssembly: true,
    },
};
