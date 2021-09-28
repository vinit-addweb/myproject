//area of diffrent shapes
function area(sh) {
    if (sh.shape === "circle") {
        return Math.PI * sh.radius * sh.radius;
    }
    else if (sh.shape === "square") {
        return sh.x * sh.x;
    }
    else {
        return (sh.x * sh.y) / 2;
    }
}
var circle = { shape: "circle", radius: 5 };
var r = area(circle);
var square = { shape: "square", x: 5 };
var re = area(square);
var rectangle = { shape: "rectangle", x: 5, y: 5 };
var ree = area(rectangle);
console.log("Area of circle is: " + r);
console.log("Area of square is: " + re);
console.log("Area of rectangle is: " + ree);
