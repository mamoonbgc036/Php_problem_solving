const array = [100, 100, 50, 40, 40, 20, 10]

function removeDuplicate(array) {
    let uniqueArray = []
    for (let i = 0; i < array.length; i++) {
        let found = false;
        for (let j = 0; j < uniqueArray.length; j++) {
            if (uniqueArray[j] == array[i]) {
                found = true
            }
        }
        if (!found) {
            uniqueArray[uniqueArray.length] = array[i]
        }
    }
    return uniqueArray;
}

console.log(removeDuplicate(array))