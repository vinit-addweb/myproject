interface Test{
    Name:string,
    rollno:number
}

let vinit:Test={
    Name:'Vinit',
    rollno:451
}
let ankit:Test ={
    Name:"Ankit",
    rollno:485
   
} 

//class 
class Vinit{
    name:string;
    rollno:number;
    Name: string;
    constructor(Name:string,Rollno:number){
        this.Name= Name,
        this.rollno = Rollno;
    }
}

console.log(vinit);
console.log(ankit);
let emp:Test = new Vinit("Sumit",325);
console.log(emp);