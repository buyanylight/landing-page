/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/init.js":
/*!******************************!*\
  !*** ./resources/js/init.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed (from ./node_modules/babel-loader/lib/index.js):\\nError: ENOENT: no such file or directory, open 'G:\\\\xampp-php7.2\\\\htdocs\\\\BAL-Landing_Page\\\\resources\\\\js\\\\init.js'\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9pbml0LmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/init.js\n");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcz8zNzM2Il0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3Nhc3MvYXBwLnNjc3MuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/sass/app.scss\n");

/***/ }),

/***/ "./resources/sass/home.scss":
/*!**********************************!*\
  !*** ./resources/sass/home.scss ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9ob21lLnNjc3M/MTYyZiJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSIsImZpbGUiOiIuL3Jlc291cmNlcy9zYXNzL2hvbWUuc2Nzcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/sass/home.scss\n");

/***/ }),

/***/ "./resources/sass/ieo-mobile.scss":
/*!****************************************!*\
  !*** ./resources/sass/ieo-mobile.scss ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9pZW8tbW9iaWxlLnNjc3M/OWQ3ZiJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSIsImZpbGUiOiIuL3Jlc291cmNlcy9zYXNzL2llby1tb2JpbGUuc2Nzcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/sass/ieo-mobile.scss\n");

/***/ }),

/***/ "./resources/sass/ieo.scss":
/*!*********************************!*\
  !*** ./resources/sass/ieo.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9pZW8uc2Nzcz9mOWZkIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3Nhc3MvaWVvLnNjc3MuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/sass/ieo.scss\n");

/***/ }),

/***/ "./resources/sass/mobile-home.scss":
/*!*****************************************!*\
  !*** ./resources/sass/mobile-home.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9tb2JpbGUtaG9tZS5zY3NzP2QyYTEiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUEiLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Fzcy9tb2JpbGUtaG9tZS5zY3NzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy8gcmVtb3ZlZCBieSBleHRyYWN0LXRleHQtd2VicGFjay1wbHVnaW4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/sass/mobile-home.scss\n");

/***/ }),

/***/ "./resources/sass/mobile.scss":
/*!************************************!*\
  !*** ./resources/sass/mobile.scss ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9tb2JpbGUuc2Nzcz8zMzZjIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3Nhc3MvbW9iaWxlLnNjc3MuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/sass/mobile.scss\n");

/***/ }),

/***/ "./resources/sass/mytower-mobile.scss":
/*!********************************************!*\
  !*** ./resources/sass/mytower-mobile.scss ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9teXRvd2VyLW1vYmlsZS5zY3NzPzVmY2QiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUEiLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Fzcy9teXRvd2VyLW1vYmlsZS5zY3NzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy8gcmVtb3ZlZCBieSBleHRyYWN0LXRleHQtd2VicGFjay1wbHVnaW4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/sass/mytower-mobile.scss\n");

/***/ }),

/***/ "./resources/sass/mytower.scss":
/*!*************************************!*\
  !*** ./resources/sass/mytower.scss ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9teXRvd2VyLnNjc3M/NTk3YyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSIsImZpbGUiOiIuL3Jlc291cmNlcy9zYXNzL215dG93ZXIuc2Nzcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/sass/mytower.scss\n");

/***/ }),

/***/ "./resources/sass/preloaders.scss":
/*!****************************************!*\
  !*** ./resources/sass/preloaders.scss ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9wcmVsb2FkZXJzLnNjc3M/MzkwNCJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSIsImZpbGUiOiIuL3Jlc291cmNlcy9zYXNzL3ByZWxvYWRlcnMuc2Nzcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/sass/preloaders.scss\n");

/***/ }),

/***/ "./resources/sass/privacy.scss":
/*!*************************************!*\
  !*** ./resources/sass/privacy.scss ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9wcml2YWN5LnNjc3M/M2IwMCJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSIsImZpbGUiOiIuL3Jlc291cmNlcy9zYXNzL3ByaXZhY3kuc2Nzcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/sass/privacy.scss\n");

/***/ }),

/***/ "./resources/sass/progress-bar.scss":
/*!******************************************!*\
  !*** ./resources/sass/progress-bar.scss ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed (from ./node_modules/css-loader/index.js):\\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/lib/loader.js):\\nError: ENOENT: no such file or directory, open 'G:\\\\xampp-php7.2\\\\htdocs\\\\BAL-Landing_Page\\\\resources\\\\sass\\\\progress-bar.scss'\\n    at runLoaders (G:\\\\xampp-php7.2\\\\htdocs\\\\BAL-Landing_Page\\\\node_modules\\\\webpack\\\\lib\\\\NormalModule.js:302:20)\\n    at G:\\\\xampp-php7.2\\\\htdocs\\\\BAL-Landing_Page\\\\node_modules\\\\loader-runner\\\\lib\\\\LoaderRunner.js:367:11\\n    at G:\\\\xampp-php7.2\\\\htdocs\\\\BAL-Landing_Page\\\\node_modules\\\\loader-runner\\\\lib\\\\LoaderRunner.js:203:19\\n    at process.nextTick (G:\\\\xampp-php7.2\\\\htdocs\\\\BAL-Landing_Page\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\CachedInputFileSystem.js:73:15)\\n    at process._tickCallback (internal/process/next_tick.js:61:11)\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiIuL3Jlc291cmNlcy9zYXNzL3Byb2dyZXNzLWJhci5zY3NzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/sass/progress-bar.scss\n");

/***/ }),

/***/ "./resources/sass/slick/slick-theme.scss":
/*!***********************************************!*\
  !*** ./resources/sass/slick/slick-theme.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9zbGljay9zbGljay10aGVtZS5zY3NzPzZiODIiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUEiLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Fzcy9zbGljay9zbGljay10aGVtZS5zY3NzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy8gcmVtb3ZlZCBieSBleHRyYWN0LXRleHQtd2VicGFjay1wbHVnaW4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/sass/slick/slick-theme.scss\n");

/***/ }),

/***/ "./resources/sass/slick/slick.scss":
/*!*****************************************!*\
  !*** ./resources/sass/slick/slick.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9zbGljay9zbGljay5zY3NzP2MyMWIiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUEiLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Fzcy9zbGljay9zbGljay5zY3NzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy8gcmVtb3ZlZCBieSBleHRyYWN0LXRleHQtd2VicGFjay1wbHVnaW4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/sass/slick/slick.scss\n");

/***/ }),

/***/ 0:
/*!******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** multi ./resources/js/init.js ./resources/sass/progress-bar.scss ./resources/sass/app.scss ./resources/sass/privacy.scss ./resources/sass/mytower.scss ./resources/sass/mytower-mobile.scss ./resources/sass/ieo.scss ./resources/sass/home.scss ./resources/sass/mobile-home.scss ./resources/sass/ieo-mobile.scss ./resources/sass/slick/slick.scss ./resources/sass/slick/slick-theme.scss ./resources/sass/preloaders.scss ./resources/sass/mobile.scss ***!
  \******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\js\init.js */"./resources/js/init.js");
__webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\sass\progress-bar.scss */"./resources/sass/progress-bar.scss");
__webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\sass\app.scss */"./resources/sass/app.scss");
__webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\sass\privacy.scss */"./resources/sass/privacy.scss");
__webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\sass\mytower.scss */"./resources/sass/mytower.scss");
__webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\sass\mytower-mobile.scss */"./resources/sass/mytower-mobile.scss");
__webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\sass\ieo.scss */"./resources/sass/ieo.scss");
__webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\sass\home.scss */"./resources/sass/home.scss");
__webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\sass\mobile-home.scss */"./resources/sass/mobile-home.scss");
__webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\sass\ieo-mobile.scss */"./resources/sass/ieo-mobile.scss");
__webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\sass\slick\slick.scss */"./resources/sass/slick/slick.scss");
__webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\sass\slick\slick-theme.scss */"./resources/sass/slick/slick-theme.scss");
__webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\sass\preloaders.scss */"./resources/sass/preloaders.scss");
module.exports = __webpack_require__(/*! G:\xampp-php7.2\htdocs\BAL-Landing_Page\resources\sass\mobile.scss */"./resources/sass/mobile.scss");


/***/ })

/******/ });