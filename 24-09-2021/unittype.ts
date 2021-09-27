/*declare function myfunction(a:string,n:number,dirction:"left"|"right"):string;

let d = "right"
console.log(myfunction(d,10,"left"));
*/


let hello = (h:string ,b:number,dirction:"right"|"left"):string => {
 return `my name is ${h} and id is ${b} dirction is ${dirction}`
}

console.log(hello("vinit",7,"right"));
