interface Read{
   readonly b:Number;
}
let bx: Read ={b:15};
//bx.b =12;
console.log(bx.b);

let c =[1,2,3] as const;
c.push(102);
console.log(c);