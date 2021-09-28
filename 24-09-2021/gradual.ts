// set any type varibale

const a:any = [];
a.push(2);
a.push(" hello ");



let h = "";
function my(j, k)
{
   h+= j + k;
}

a.forEach(my);


console.log(h);
//console.log(a.map(a[1]));