var JsonEditor = (function () {
    function JsonEditor(element, schema) {
        if (schema === void 0) { schema = null; }
        this.initLinks();
        this.linkObject = new LinkObject();
        this.element = element;
        if (schema) {
            this.setSchema(schema);
        }
    }
    JsonEditor.prototype.initLinks = function () {
        var _this = this;
        this.singleLink = [];
        this.multiLink = [];
        this.singleLink["string"] = function (schema, item, container) {
            container.className = "element";
            var temp = mk("input", "", "", { type: "text" });
            item.getValue = function () {
                return temp.value;
            };
            item.setValue = function (val) {
                temp.value = val.toString();
            };
            item.element = temp;
            return temp;
        };
        this.singleLink["number"] = function (schema, item, container) {
            container.className = "element";
            var temp = mk("input", "", "", { type: "number" });
            item.getValue = function () {
                return temp.value;
            };
            item.setValue = function (val) {
                temp.value = val.toString();
            };
            item.element = temp;
            return temp;
        };
        this.singleLink["boolean"] = function (schema, item, container) {
            container.className = "";
            var temp = mk("input", "", "", { type: "checkbox" });
            item.getValue = function () {
                return temp.checked;
            };
            item.setValue = function (val) {
                temp.checked = val;
            };
            item.element = temp;
            return temp;
        };
        this.multiLink["object"] = function (schema, item, container) { return _this.makeObject(schema, item, container); };
        this.multiLink["array"] = function (schema, item, container) { return _this.makeArray(schema, item, container); };
    };
    JsonEditor.prototype.makeObject = function (schema, item, container) {
        var ele = document.createElement("div");
        this.parseObject(ele, schema["properties"], item);
        return ele;
    };
    JsonEditor.prototype.makeArray = function (schema, item, container) {
        var _this = this;
        var ele = mk("div");
        var add = mk("span", "Add", "add");
        container.appendChild(add);
        var items = [];
        var addArray = function () {
            var tempItem = new LinkObject();
            ele.appendChild(_this.getElement(schema["items"], tempItem));
            items.push(tempItem);
        };
        add.addEventListener("click", addArray);
        addArray(); // Adds first item to array;
        item.child = items;
        item.add = addArray;
        return ele;
    };
    JsonEditor.prototype.setSchema = function (schema) {
        this.schema = schema;
        this.element.innerHTML = "";
        this.element.appendChild(this.getElement(schema, this.linkObject));
    };
    JsonEditor.prototype.getElement = function (schema, linkObject, name) {
        if (name === void 0) { name = null; }
        var container = mk("div", "", "");
        container.appendChild(mk("span", schema["title"] || name || "Scheme", "title"));
        var type = schema["type"];
        var element;
        var func = this.singleLink[type];
        if (func) {
            element = func(schema, linkObject, container);
        }
        var multiFunc = this.multiLink[type];
        if (multiFunc) {
            container.className = "box";
            var minimize_1 = mk("span", "min", "add");
            minimize_1.addEventListener("click", function (ev) {
                var firstKey = Object.keys(linkObject.child)[0];
                if (container.classList.toggle("minimized")) {
                    var extension = "";
                    var firstValue = linkObject.child[firstKey];
                    if (firstValue && firstValue.getValue) {
                        extension = firstValue.getValue();
                    }
                    else if (Array.isArray(linkObject.child)) {
                        extension = "Count: " + linkObject.child.length;
                    }
                    minimize_1.innerHTML = "max " + extension;
                }
                else {
                    minimize_1.innerHTML = "min";
                }
            });
            container.appendChild(minimize_1);
            element = multiFunc(schema, linkObject, container);
        }
        if (element) {
            container.appendChild(element);
        }
        return container;
    };
    JsonEditor.prototype.parseObject = function (element, obj, linkObject) {
        //console.log(linkObject);
        linkObject.child = {};
        for (var key in obj) {
            var newLink = new LinkObject();
            var tempElement = this.getElement(obj[key], newLink, key);
            if (!newLink.element) {
                newLink.element = tempElement;
            }
            linkObject.child[key] = newLink;
            element.appendChild(tempElement);
        }
    };
    JsonEditor.prototype.setObject = function (obj) {
        this.setFields(obj, this.linkObject);
    };
    JsonEditor.prototype.setFields = function (obj, link) {
        for (var key in obj) {
            if (link.child[key]) {
                if (!Array.isArray(obj[key])) {
                    link.child[key].setValue(obj[key]);
                }
                else {
                    if (link.child[key].child.length <= 1) {
                        link.child[key].add();
                    }
                    for (var i = 0; i < obj[key].length; i++) {
                        this.setFields(obj[key][i], link.child[key].child[i]);
                        if (link.child[key].child.length - 1 <= i) {
                            link.child[key].add();
                        }
                    }
                }
            }
        }
    };
    JsonEditor.prototype.getObject = function () {
        return this.fillObject(this.linkObject);
    };
    JsonEditor.prototype.fillObject = function (linkObject) {
        var obj = {};
        if (Array.isArray(linkObject.child)) {
            obj = [];
        }
        var isAllNull = true;
        for (var a in linkObject.child) {
            var temp = linkObject.child[a].getValue;
            if (temp) {
                var value = temp();
                if (value && value != "") {
                    obj[a] = value;
                    isAllNull = false;
                }
            }
            else {
                var temp_1 = this.fillObject(linkObject.child[a]);
                if (temp_1) {
                    isAllNull = false;
                    obj[a] = temp_1;
                }
            }
        }
        if (isAllNull) {
            return null;
        }
        return obj;
    };
    return JsonEditor;
}());
function mk(tag, innerHTML, className, obj) {
    if (innerHTML === void 0) { innerHTML = ""; }
    if (className === void 0) { className = ""; }
    if (obj === void 0) { obj = null; }
    var element = document.createElement(tag);
    element.innerHTML = innerHTML;
    element.className = className;
    if (obj != null) {
        for (var key in obj) {
            element[key] = obj[key];
        }
    }
    return element;
}
var LinkObject = (function () {
    function LinkObject() {
    }
    return LinkObject;
}());
//# sourceMappingURL=JsonEditor.js.map