// Import express dan router
const express = require("express")
const router = require("./routes/api")

// Membuat object express
const app = express()

// Menggunalan middleware
app.use(express.json())
app.use(express.urlencoded())

// Menggunakan router
app.use(router)

// Menjalankan server
app.listen(3000, () => {
    console.log("Server running on port 3000")
})
