var App = /** @class */ (function () {
    function App(name, id) {
        this.id = 101;
        this.name = name;
        //this.id;
    }
    App.prototype.getname = function () {
        return "Name is " + this.name + " and Id is " + this.id + ".";
    };
    return App;
}());
var a1 = new App("Vinit", 101);
console.log(a1.getname());
