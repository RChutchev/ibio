/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/carousel.js ***!
  \**********************************/
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _get() { if (typeof Reflect !== "undefined" && Reflect.get) { _get = Reflect.get.bind(); } else { _get = function _get(target, property, receiver) { var base = _superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(arguments.length < 3 ? target : receiver); } return desc.value; }; } return _get.apply(this, arguments); }

function _superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = _getPrototypeOf(object); if (object === null) break; } return object; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

var cardsContainer = document.querySelector(".card-carousel");
var cardsController = document.querySelector(".card-carousel + .card-controller");

var DraggingEvent = /*#__PURE__*/function () {
  function DraggingEvent() {
    var target = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : undefined;

    _classCallCheck(this, DraggingEvent);

    this.target = target;
  }

  _createClass(DraggingEvent, [{
    key: "event",
    value: function event(callback) {
      var handler;
      this.target.addEventListener("mousedown", function (e) {
        e.preventDefault();
        handler = callback(e);
        window.addEventListener("mousemove", handler);
        document.addEventListener("mouseleave", clearDraggingEvent);
        window.addEventListener("mouseup", clearDraggingEvent);

        function clearDraggingEvent() {
          window.removeEventListener("mousemove", handler);
          window.removeEventListener("mouseup", clearDraggingEvent);
          document.removeEventListener("mouseleave", clearDraggingEvent);
          handler(null);
        }
      });
      this.target.addEventListener("touchstart", function (e) {
        handler = callback(e);
        window.addEventListener("touchmove", handler);
        window.addEventListener("touchend", clearDraggingEvent);
        document.body.addEventListener("mouseleave", clearDraggingEvent);

        function clearDraggingEvent() {
          window.removeEventListener("touchmove", handler);
          window.removeEventListener("touchend", clearDraggingEvent);
          handler(null);
        }
      });
    } // Get the distance that the user has dragged

  }, {
    key: "getDistance",
    value: function getDistance(callback) {
      function distanceInit(e1) {
        var startingX, startingY;

        if ("touches" in e1) {
          startingX = e1.touches[0].clientX;
          startingY = e1.touches[0].clientY;
        } else {
          startingX = e1.clientX;
          startingY = e1.clientY;
        }

        return function (e2) {
          if (e2 === null) {
            return callback(null);
          } else {
            if ("touches" in e2) {
              return callback({
                x: e2.touches[0].clientX - startingX,
                y: e2.touches[0].clientY - startingY
              });
            } else {
              return callback({
                x: e2.clientX - startingX,
                y: e2.clientY - startingY
              });
            }
          }
        };
      }

      this.event(distanceInit);
    }
  }]);

  return DraggingEvent;
}();

var CardCarousel = /*#__PURE__*/function (_DraggingEvent) {
  _inherits(CardCarousel, _DraggingEvent);

  var _super = _createSuper(CardCarousel);

  function CardCarousel(container) {
    var _thisSuper, _this;

    var controller = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : undefined;

    _classCallCheck(this, CardCarousel);

    _this = _super.call(this, container); // DOM elements

    _this.container = container;
    _this.controllerElement = controller;
    _this.cards = container.querySelectorAll(".card"); // Carousel data

    _this.centerIndex = (_this.cards.length - 1) / 2;
    _this.cardWidth = _this.cards[0].offsetWidth / _this.container.offsetWidth * 100;
    _this.xScale = {}; // Resizing

    window.addEventListener("resize", _this.updateCardWidth.bind(_assertThisInitialized(_this)));

    if (_this.controllerElement) {
      _this.controllerElement.addEventListener("keydown", _this.controller.bind(_assertThisInitialized(_this)));
    } // Initializers


    _this.build(); // Bind dragging event


    _get((_thisSuper = _assertThisInitialized(_this), _getPrototypeOf(CardCarousel.prototype)), "getDistance", _thisSuper).call(_thisSuper, _this.moveCards.bind(_assertThisInitialized(_this)));

    return _this;
  }

  _createClass(CardCarousel, [{
    key: "updateCardWidth",
    value: function updateCardWidth() {
      this.cardWidth = this.cards[0].offsetWidth / this.container.offsetWidth * 100;
      this.build();
    }
  }, {
    key: "build",
    value: function build() {
      var fix = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;

      for (var i = 0; i < this.cards.length; i++) {
        var x = i - this.centerIndex;
        var scale = this.calcScale(x);
        var scale2 = this.calcScale2(x);
        var zIndex = -Math.abs(i - this.centerIndex);
        var leftPos = this.calcPos(x, scale2);
        this.xScale[x] = this.cards[i];
        this.updateCards(this.cards[i], {
          x: x,
          scale: scale,
          leftPos: leftPos,
          zIndex: zIndex
        });
      }
    }
  }, {
    key: "controller",
    value: function controller(e) {
      var temp = _objectSpread({}, this.xScale);

      if (e.keyCode === 39) {
        // Left arrow
        for (var x in this.xScale) {
          var newX = parseInt(x) - 1 < -this.centerIndex ? this.centerIndex : parseInt(x) - 1;
          temp[newX] = this.xScale[x];
        }
      }

      if (e.keyCode == 37) {
        // Right arrow
        for (var _x in this.xScale) {
          var _newX = parseInt(_x) + 1 > this.centerIndex ? -this.centerIndex : parseInt(_x) + 1;

          temp[_newX] = this.xScale[_x];
        }
      }

      this.xScale = temp;

      for (var _x2 in temp) {
        var scale = this.calcScale(_x2),
            scale2 = this.calcScale2(_x2),
            leftPos = this.calcPos(_x2, scale2),
            zIndex = -Math.abs(_x2);
        this.updateCards(this.xScale[_x2], {
          x: _x2,
          scale: scale,
          leftPos: leftPos,
          zIndex: zIndex
        });
      }
    }
  }, {
    key: "calcPos",
    value: function calcPos(x, scale) {
      var formula;

      if (x < 0) {
        formula = (scale * 100 - this.cardWidth) / 2;
        return formula;
      } else if (x > 0) {
        formula = 100 - (scale * 100 + this.cardWidth) / 2;
        return formula;
      } else {
        formula = 100 - (scale * 100 + this.cardWidth) / 2;
        return formula;
      }
    }
  }, {
    key: "updateCards",
    value: function updateCards(card, data) {
      if (data.x || data.x == 0) {
        card.setAttribute("data-x", data.x);
      }

      if (data.scale || data.scale == 0) {
        card.style.transform = "scale(".concat(data.scale, ")");

        if (data.scale == 0) {
          card.style.opacity = data.scale;
        } else {
          card.style.opacity = 1;
        }
      }

      if (data.leftPos) {
        card.style.left = "".concat(data.leftPos, "%");
      }

      if (data.zIndex || data.zIndex == 0) {
        if (data.zIndex == 0) {
          card.classList.add("highlight");
        } else {
          card.classList.remove("highlight");
        }

        card.style.zIndex = data.zIndex;
      }
    }
  }, {
    key: "calcScale2",
    value: function calcScale2(x) {
      var formula;

      if (x <= 0) {
        formula = 1 - -1 / 5 * x;
        return formula;
      } else if (x > 0) {
        formula = 1 - 1 / 5 * x;
        return formula;
      }
    }
  }, {
    key: "calcScale",
    value: function calcScale(x) {
      var formula = 1 - 1 / 5 * Math.pow(x, 2);

      if (formula <= 0) {
        return 0;
      } else {
        return formula;
      }
    }
  }, {
    key: "checkOrdering",
    value: function checkOrdering(card, x, xDist) {
      var original = parseInt(card.dataset.x);
      var rounded = Math.round(xDist);
      var newX = x;

      if (x !== x + rounded) {
        if (x + rounded > original) {
          if (x + rounded > this.centerIndex) {
            newX = x + rounded - 1 - this.centerIndex - rounded + -this.centerIndex;
          }
        } else if (x + rounded < original) {
          if (x + rounded < -this.centerIndex) {
            newX = x + rounded + 1 + this.centerIndex - rounded + this.centerIndex;
          }
        }

        this.xScale[newX + rounded] = card;
      }

      var temp = -Math.abs(newX + rounded);
      this.updateCards(card, {
        zIndex: temp
      });
      return newX;
    }
  }, {
    key: "moveCards",
    value: function moveCards(data) {
      var xDist;

      if (data != null) {
        this.container.classList.remove("smooth-return");
        xDist = data.x / 250;
      } else {
        this.container.classList.add("smooth-return");
        xDist = 0;

        for (var x in this.xScale) {
          this.updateCards(this.xScale[x], {
            x: x,
            zIndex: Math.abs(Math.abs(x) - this.centerIndex)
          });
        }
      }

      for (var i = 0; i < this.cards.length; i++) {
        var _x3 = this.checkOrdering(this.cards[i], parseInt(this.cards[i].dataset.x), xDist),
            scale = this.calcScale(_x3 + xDist),
            scale2 = this.calcScale2(_x3 + xDist),
            leftPos = this.calcPos(_x3 + xDist, scale2);

        this.updateCards(this.cards[i], {
          scale: scale,
          leftPos: leftPos
        });
      }
    }
  }]);

  return CardCarousel;
}(DraggingEvent);

var carousel = new CardCarousel(cardsContainer);
/******/ })()
;