interface  a1{
    name:string,
    id:number;
}

interface b1{
    email:string;
    phone:number;
}

type employee = a1&b1;

let g : employee = {
    name:"vinit",
    email:"vinit4d@gmail.com",
    id:1024,
    phone:8189252861,

}

console.log(g)