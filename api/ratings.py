import pandas as pd

def leer_ratings():
    # Ruta al archivo ratings.csv dentro de la carpeta clonada
    ruta_ratings = 'MovieLens-100K_Recommender-System/data/ratings.csv'

    # Lee el archivo CSV en un DataFrame
    ratings = pd.read_csv(ruta_ratings)

    # Imprime las primeras filas del DataFrame
    print(ratings.head())

    # Retorna el DataFrame
    return ratings

def leer_links():
    # Ruta al archivo ratings.csv dentro de la carpeta clonada
    ruta_links = 'MovieLens-100K_Recommender-System/data/links.csv'

    # Lee el archivo CSV en un DataFrame
    links = pd.read_csv(ruta_links)

    # Imprime las primeras filas del DataFrame
    print(links.head())

    # Retorna el DataFrame
    return links

def leer_movies():
    # Ruta al archivo ratings.csv dentro de la carpeta clonada
    ruta_movies = 'MovieLens-100K_Recommender-System/data/movies.csv'

    # Lee el archivo CSV en un DataFrame
    movies = pd.read_csv(ruta_movies)

    # Imprime las primeras filas del DataFrame
    print(movies.head())

    # Retorna el DataFrame
    return movies

def leer_tags():
    # Ruta al archivo ratings.csv dentro de la carpeta clonada
    ruta_tags = 'MovieLens-100K_Recommender-System/data/tags.csv'

    # Lee el archivo CSV en un DataFrame
    tags = pd.read_csv(ruta_tags)

    # Imprime las primeras filas del DataFrame
    print(tags.head())

    # Retorna el DataFrame
    return tags
leer_tags()



