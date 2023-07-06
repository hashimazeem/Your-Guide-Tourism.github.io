const API_KEY = `3265874a2c77ae4a04bb96236a642d2f`
const form = document.querySelector("form")
const search = document.querySelector("#search")
const weather = document.querySelector("#weather")

const getWeather = async(city) => {
    weather.innerHTML = `<h2>Loading...</h2>`
    const url = `https://api.openweathermap.org/data/2.5/forecast/daily?q=${city}&cnt=7&appid=${API_KEY}&units=metric`
    const response = await fetch(url);
    const data = await response.json()
    return showWeather(data)
}

const showWeather = (data) => {
    if (data.cod == "404") {
        weather.innerHTML = `<h2>City Not Found</h2>`
        return;
    }
    let forecastData = data.list
    let forecastHTML = forecastData.map((item) => {
        return `
            <div>
                <h4>${new Date(item.dt * 1000).toLocaleDateString(undefined, { weekday: 'short' })}</h4>
                <img src="https://openweathermap.org/img/wn/${item.weather[0].icon}.png">
                <h2>${item.temp.day} ℃</h2>
                <h4>${item.weather[0].main}</h4>
            </div>
        `
    }).join("")
    weather.innerHTML = forecastHTML;
}

form.addEventListener(
    "submit",
    function(event) {
        getWeather(search.value)
        event.preventDefault();
    }
)
