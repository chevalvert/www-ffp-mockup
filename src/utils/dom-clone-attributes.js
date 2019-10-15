export default (nodeA, nodeB) => {
  if (!nodeA || !nodeB) return
  Array.from(nodeA.attributes).forEach(({ nodeName, nodeValue }) => nodeB.setAttribute(nodeName, nodeValue))
}
