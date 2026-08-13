require("dotenv").config();
const express = require("express");
const cors = require("cors");

const app = express();
const PORT = process.env.PORT;

app.use(cors());
app.use(express.json());

let products = [
  { id: 1, name: "Rooibos Tea 100g", price: 45.99, category: "Beverages" },
  { id: 2, name: "Biltong 250g", price: 89.99, category: "Snacks" },
  { id: 3, name: "Ouma Rusks 500g", price: 54.99, category: "Bakery" },
];

app.get("/products", (req, res) => {
  res.json(products);
});

app.post("/products", (req, res) => {
  const { name, price, category } = req.body;
  const newProduct = {
    id: products.length ? Math.max(...products.map((p) => p.id)) + 1 : 1,
    name,
    price,
    category,
  };
  products.push(newProduct);
  res.json(products);
});

app.delete("/products/:id", (req, res) => {
  const id = parseInt(req.params.id);
  products = products.filter((p) => p.id !== id);
  res.json(products);
});

app.listen(PORT, () => {
  console.log(`Server running at http://localhost:${PORT}`);
});
