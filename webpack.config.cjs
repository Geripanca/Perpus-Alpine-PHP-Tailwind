const path = require("path");

module.exports = {
  entry: "./src/js/script.js", // Path ke file JavaScript utama
  output: {
    filename: "bundle.js", // Nama file output bundle
    path: path.resolve(__dirname, "dist"), // Path output bundle
  },
  module: {
    rules: [
      {
        test: /\.js$/, // Proses file .js
        exclude: /node_modules/, // Kecualikan folder node_modules
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"],
          },
        },
      },
    ],
  },
  mode: "development", // Mode development, bisa diubah ke 'production'
};
