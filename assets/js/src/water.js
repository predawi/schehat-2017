const PIXI = require('../vendor/pixi.min')
const TweenMax = require('../vendor/TweenMax.min')

var initWater = function (dataBg) {
  var baseUrl = 'http://localhost/schehat/assets/img/'

  var containerSize = {x: 929, y: 808}
  var renderer = PIXI.autoDetectRenderer(containerSize.x, containerSize.y)
  document.body.appendChild(renderer.view)

  var container = new PIXI.Container()

  var app = new PIXI.Application(containerSize.x, containerSize.y, {
    view: document.getElementById('canvas')
  })

  var loader = new PIXI.loaders.Loader(baseUrl)
    .add('displacementMap', 'water.jpg')
    .add('rocks', dataBg)
    .load(init)

  console.log('rocks !')

  function init (loader, resources) {
    var background = setbackground(containerSize, new PIXI.Sprite.fromImage(baseUrl + dataBg), 'cover')
    renderer.render(container)
    var displacementSprite = new PIXI.Sprite(resources.displacementMap.texture)
    var displacementFilter = new PIXI.filters.DisplacementFilter(displacementSprite)

    container.filterArea = new PIXI.Rectangle(0, 0, containerSize.x, containerSize.y)
    container.filters = [displacementFilter]
    displacementSprite.texture.baseTexture.wrapMode = PIXI.WRAP_MODES.REPEAT

    container.position.set(-10)
    container.addChild(background)
    container.addChild(displacementSprite)
    app.stage.addChild(container)

    TweenMax.to(displacementSprite, 5, {
      ease: Linear.easeNone,
      repeat: -1,
      x: 512,
      y: 512
    })
  }
}

function setbackground (bgSize, inputSprite, type, forceSize) {
  var sprite = inputSprite
  var bgContainer = new PIXI.Container()
  var mask = new PIXI.Graphics().beginFill(0x8bc5ff).drawRect(0, 0, bgSize.x, bgSize.y).endFill()
  bgContainer.mask = mask
  bgContainer.addChild(mask)
  bgContainer.addChild(sprite)

  var sp = {x: sprite.width, y: sprite.height}
  if (forceSize) sp = forceSize
  var winratio = bgSize.x / bgSize.y
  var spratio = sp.x / sp.y
  var scale = 1
  var pos = new PIXI.Point(0, 0)
  if (type === 'cover' ? (winratio > spratio) : (winratio < spratio)) {
    // photo is wider than background
    scale = bgSize.x / sp.x
    pos.y = -((sp.y * scale) - bgSize.y) / 2
  } else {
    // photo is taller than background
    scale = bgSize.y / sp.y
    pos.x = -((sp.x * scale) - bgSize.x) / 2
  }

  sprite.scale = new PIXI.Point(scale, scale)
  sprite.position = pos

  return bgContainer
}

module.exports = initWater