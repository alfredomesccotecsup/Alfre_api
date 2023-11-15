from flask import Flask, jsonify
from ratings import *
from flask_caching import Cache

app = Flask(__name__)
cache = Cache(app, config={'CACHE_TYPE': 'redis', 'CACHE_REDIS_URL': 'redis://redis:6379/0'})

@app.route("/")
def index():
    return "Usage: http://<hostname>[:<prt>]/api/leer_ratings"

@app.route("/api/leer_ratings")
@cache.cached(timeout=60)  # Cachea los resultados por 60 segundos
def api_leer_ratings():
    # Llama a la función leer_ratings para obtener el DataFrame
    ratings_df = leer_ratings()

    # Obtén solo los primeros 5 registros
    first_5_records = ratings_df.head().to_dict(orient="records")

    return jsonify(first_5_records)

@app.route("/api/leer_links")
@cache.cached(timeout=60)  # Cachea los resultados por 60 segundos
def api_leer_links():
    ratings_df = leer_links()

    # Obtén solo los primeros 5 registros
    first_5_records = ratings_df.head().to_dict(orient="records")

    return jsonify(first_5_records)

@app.route("/api/leer_movies")
@cache.cached(timeout=60)  # Cachea los resultados por 60 segundos
def api_leer_movies():
    ratings_df = leer_movies()

    # Obtén solo los primeros 5 registros
    first_5_records = ratings_df.head().to_dict(orient="records")

    return jsonify(first_5_records)

@app.route("/api/leer_tags")
@cache.cached(timeout=60)  # Cachea los resultados por 60 segundos
def api_leer_tags():
    ratings_df = leer_tags()

    # Obtén solo los primeros 5 registros
    first_5_records = ratings_df.head().to_dict(orient="records")

    return jsonify(first_5_records)

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000)
