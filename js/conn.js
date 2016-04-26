// Get the connection type.
var type = navigator.connection.type;

// Get an upper bound on the downlink speed of the first network hop
var max = navigator.connection.downlinkMax;

function changeHandler(e) {
// Handle change to connection here.
}

// Register for event changes.
navigator.connection.onchange = changeHandler;

// Alternatively.
navigator.connection.addEventListener('change', changeHandler);