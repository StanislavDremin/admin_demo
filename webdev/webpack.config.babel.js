import path from 'path';
import Encore from '@symfony/webpack-encore';

Encore
// directory where all compiled assets will be stored
	.setOutputPath('..')

	// what's the public path to this directory (relative to your project's document root dir)
	.setPublicPath('/public/asset')

	.addStyleEntry('/public/asset/admin/css/components', path.join(__dirname, '..','/resources/assets/js/admin/main_admin.js'))

	.addEntry('/public/asset/admin/js/builder', path.join(__dirname, '..','/resources/assets/js/admin/main_admin.js'))

	// allow sass/scss files to be processed
	.enableSassLoader()
	.enableVueLoader()

	// allow legacy applications to use $/jQuery as a global variable
	.autoProvidejQuery()

	.enableSourceMaps(false)
	.setManifestKeyPrefix('public/')
// create hashed filenames (e.g. app.abc123.css)
// .enableVersioning()
;

const config = Encore.getWebpackConfig();

if (!config.resolve.hasOwnProperty('modules')) {
	config.resolve = Object.assign({}, config.resolve, {
		modules: [
			path.join(__dirname, 'custom_module', 'js'),
			'node_modules'
		]
	})
}

module.exports = config;