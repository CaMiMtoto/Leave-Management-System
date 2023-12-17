function sockMerchant(n, ar) {
    // Write your code here
    let pairs = {};
    for (let j = 0; j < n; j++) {
        let color = ar[j];
        if (pairs.hasOwnProperty(color)) {
            pairs[color] += 1;
        } else {
            pairs[color] = 1;
        }
    }
    console.log(pairs);
    let count = 0;
    Object.values(pairs).forEach((value) => {
        return count += Math.floor(value / 2);
    });

    return count;
}

console.log(sockMerchant(9, [10, 20, 20, 10, 10, 30, 50, 10, 20]));

function pageCount(n, p) {
    // Calculate the number of pages to turn from the beginning
    const fromBeginning = Math.floor(p / 2);

    // Calculate the number of pages to turn from the end
    const fromEnd = Math.floor((n / 2) - fromBeginning);

    // Return the minimum of the two options
    return Math.min(fromBeginning, fromEnd);
}

// Example usage:
const n = 5;
const p = 4;
const result = pageCount(n, p);
console.log(result);  // Output: 1

