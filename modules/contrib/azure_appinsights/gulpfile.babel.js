// Get gulp components and templates.
import { series, parallel, watch } from "gulp";
import { js, lib } from "@coldfrontlabs/gulp-templates";

const paths = {
  js: {
    src: "js",
    dest: "dist/js",
    selector: "**/*.js"
  },
  lib: {
    src: ["node_modules/@microsoft/applicationinsights-web/browser/ai.2.4.4.*"],
    dest: "dist/lib"
  },
  min: "**/*.min.*"
};

/**
 * Lints all JS files.
 *
 * @return {Object} - Gulp stream.
 */
export const lintScripts = () =>
  js.lint({ source: `${paths.js.src}/${paths.js.selector}` });
lintScripts.description = "Lints all JS files.";

/**
 * Lints and fixes all JS files.
 *
 * @return {Object} - Gulp stream.
 */
export const lintScriptsFix = () =>
  js.fix({ source: `${paths.js.src}/${paths.js.selector}` });
lintScriptsFix.description = "Lints and fixes all JS files.";

/**
 * Compiles all JS files using Babel.
 *
 * @return {Object} - Gulp stream.
 */
export const compileScripts = () =>
  js.compile({
    source: `${paths.js.src}/${paths.js.selector}`,
    destination: paths.js.dest
  });
compileScripts.description = "Compiles all JS files using Babel.";

/**
 * Minifies all JS files.
 *
 * @return {Object} - Gulp stream.
 */
export const minifyScripts = () =>
  js.minify({
    source: [`${paths.js.dest}/${paths.js.selector}`, `!${paths.min}`],
    destination: paths.js.dest
  });
minifyScripts.description = "Minifies all JS files.";

/**
 * Gathers all required libraries.
 *
 * @return {Object} - Gulp stream.
 */
export const fetchLibs = () =>
  lib.fetch({
    source: paths.lib.src,
    destination: paths.lib.dest,
    sourceOptions: { base: "./node_modules/" }
  });
fetchLibs.description = "Gathers all required libraries.";

/**
 * Lints, compiles, and minifies all Sass/CSS/JS files.
 *
 * @returns {Object} - Gulp stream.
 */
export const buildDev = parallel(
  fetchLibs,
  series(lintScripts, compileScripts, minifyScripts)
);
buildDev.description = "Lints, compiles, and minifies all Sass/CSS/JS files.";

/**
 * Compiles and minifies all Sass/CSS/JS files.
 *
 * @returns {Object} - Gulp stream.
 */
export const buildProd = parallel(
  fetchLibs,
  series(compileScripts, minifyScripts)
);
buildProd.description = "Compiles and minifies all Sass/CSS/JS files.";

/**
 * Watches all Sass/JS files and lints, compiles, and minifies them.
 */
function watchFiles() {
  watch(
    `${paths.js.src}/${paths.js.selector}`,
    series(lintScripts, compileScripts, minifyScripts)
  );
}
watchFiles.description =
  "Watches all Sass/JS files and lints, compiles, and minifies them.";
export { watchFiles as watch };

// Create default tasks
export default buildProd;
