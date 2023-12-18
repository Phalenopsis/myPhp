function fib(n) {
  if (n < 2) return n;
  let n1 = 0;
  let n2 = 1;

  for (let i = 2; i <= n; i++) {
    [n1, n2] = [n2, n1 + n2];
  }
  return n2;
}

console.log(fib(0));
console.log(fib(1));
console.log(fib(2));
console.log(fib(3));
console.log(fib(4));
console.log(fib(5));
console.log(fib(6));
console.log(fib(7));
console.log(fib(9));
console.log(fib(10));
console.log(fib(11));
console.log(fib(12));
