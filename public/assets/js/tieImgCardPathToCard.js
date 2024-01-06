const boxes = document.querySelectorAll('.box')
const tieImgCardPathToCard = document.querySelectorAll('.imgCardPath')

let imgPaths = []

tieImgCardPathToCard.forEach(path => {
    imgPaths.push(path.src)
})
boxes.forEach((box, k) => {
    box.style.backgroundImage = `url(${imgPaths[k]})`
})