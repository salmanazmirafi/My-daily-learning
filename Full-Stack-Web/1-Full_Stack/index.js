/**
 * Function
 * - All Consent Function
 *
 * Higher Order Function
 * - function can be passed as an argument
 * - function can be return form another function
 */

/**
 * Hidden concepts
 * - Scope
 * - Closure
 * - Function Context OR  Context
 * - Hosting
 */

/**
 * IFE
 */

// It's A Pure Function
function hFn(a, b) {
  const r = a + b;
  return r;
}
// It's A Higher Order Function
function generateTwoRandomNumber(max, whatDoYouWant) {
  const random1 = Math.floor(Math.random() * max);
  const random2 = Math.floor(Math.random() * max);
  const result = whatDoYouWant(random1, random2);
  return result;
}
generateTwoRandomNumber(100, (random1, random2) => {
  console.log(random1, random2);
});
generateTwoRandomNumber(100, (random1, random2) => {
  console.log(random1 + random2);
});
generateTwoRandomNumber(70, (random1, random2) => {
  console.log(random1 + random2 * random1);
});
generateTwoRandomNumber(200, (random1, random2) => {
  console.log(random1 + random2 - random2 + random1);
});

// IFE
(function(){
console.log("salman");
})();
// IFE
(() => {
    console.log("Azmi");
})();