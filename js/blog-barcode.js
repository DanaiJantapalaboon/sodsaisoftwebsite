document.getElementById("generate-barcode").addEventListener('click', function() {
    var text = document.getElementById('txt-input').value
    
    JsBarcode("#barcode", text)
})