
let my_key = '7fe8e4a145b82d9e952edc25e7ac6401'
let moti = () => {
    let qyteti = document.getElementById('qyteti_id').value
    let api_url = `https://api.openweathermap.org/data/2.5/weather?q=${qyteti}&appid=${my_key}`
    fetch(api_url)
        .then(rezultati => rezultati.json())
        .then(informacionet => {
            document.getElementById('city').innerHTML = qyteti
            document.getElementById('description').innerHTML = informacionet.weather[0].description
            let moti_c = informacionet.main.temp - 273.15
            moti_c = moti_c.toPrecision(3)
            document.getElementById('weather').innerHTML = `${moti_c} °Celsius`
            document.getElementById('city')
            document.getElementById('description')
            document.getElementById('weather')
        })
}