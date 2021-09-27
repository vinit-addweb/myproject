interface IPerson { 
    firstName:string, 
    lastName:string, 
    sayHi: ()=>number|string;
 } 
 
 var customer:IPerson = { 
    firstName:"sachin",
    lastName:"tank", 
    sayHi: ():number|string =>
    {
        return "Token number is: " + 5;
    } 
 } 
 console.log("customer") 
 console.log(customer.firstName, customer.lastName) 
 console.log(customer.sayHi()) 
 
 console.log(" ");
 
 var employee:IPerson = { 
    firstName:"nitin",
    lastName:"sharma", 
    sayHi: ():number|string=>
    {
        return "Emplyee Id is: "+ 1025;
    } 
 } 
   
 console.log("Employee....") 
 console.log(employee.firstName, employee.lastName);
 console.log(employee.sayHi()) 
