from flask import Flask
import json

app = Flask(__name__)


@app.route('/')
def index():
    return json.dumps({'name': 'alice',
                       'email': 'alice@outlook.com'})


@app.route("/data")
def process_data():
    data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
    return json.dumps({"data": data})


app.run()
