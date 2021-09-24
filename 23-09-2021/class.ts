class App
{
    name:string;
    id:number = 101;
    constructor(name:string,id:number)
    {
        this.name = name
        //this.id;
    }

    getname():string
    {
        return "Name is "+ this.name+" and Id is "+this.id + ".";
    }
}
let a1 = new App("Vinit",101);
console.log(a1.getname());