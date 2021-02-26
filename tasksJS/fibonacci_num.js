// how to find a fibonacci num:
  // the first two nums of Fib range:
  function Fib(n) {
     let s = 1;
     let m = 1;
     for (let i = 3; i <= n; i++){
       let x = s + m;
       s = m;
       m = x;
     }
    return m;
  }
  // console.log(Fib(a));
  // console.log(Fib(bNext));
  // console.log(Fib(a)*Fib(bNext));
