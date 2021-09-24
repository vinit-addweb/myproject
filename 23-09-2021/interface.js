var vinit = {
    Name: 'Vinit',
    rollno: 451
};
var ankit = {
    Name: "Ankit",
    rollno: 485
};
var Vinit = /** @class */ (function () {
    function Vinit(Name, Rollno) {
        this.Name = Name,
            this.rollno = Rollno;
    }
    return Vinit;
}());
console.log(vinit);
console.log(ankit);
var emp = new Vinit("Sumit", 325);
console.log(emp);
