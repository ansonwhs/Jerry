from flask import Flask, render_template

app = Flask(__name__)

@app.route("/")
def index():
    title = "Rainmarkers"
    return render_template("index.html", title = title)

@app.route("/crew")
def crew():
    title = "The Crew"
    return render_template("crew.html", title = title)

@app.route("/jerry")
def crew0():
    title = "Jerry Law"
    return render_template("jerry.html", title = title)

@app.route("/tony")
def crew1():
    title = "Tony Laam"
    return render_template("tony.html", title = title)

if __name__ == '__main__':
   app.run(debug = True)
