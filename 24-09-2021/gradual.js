// set any type varibale
var a = [];
a.push(2);
a.push(" hello ");
var h = "";
function my(j, k) {
    h += j + k;
}
a.forEach(my);
console.log(h);
//console.log(a.map(a[1]));
