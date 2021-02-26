function productFib(prod){
  let a = 0;
  let bNext = 1;
  while(a*bNext < prod){
    // the consistency is important: first change the highest num than the prev. num:
    bNext = bNext + a;
    a = bNext - a;
  }
  // Test: how to find a fibonacci num:
  // the first two nums of Fib range:
  function Fib(n) {
     let s = 1;
     let m = 1;
    // i = 3 because of the s and m assignment;
     for (let i = 3; i <= n; i++){
       let x = s + m;
       s = m;
       m = x;
     }
    return m;
  }
  console.log(Fib(a));
  console.log(Fib(bNext));
  console.log(Fib(a)*Fib(bNext));
  return [a, bNext, a*bNext === prod];
}

// => productFib(4895), [55, 89, true]
