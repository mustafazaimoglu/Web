class Translate
{
    constructor()
    {
        this.apiKey = "trnsl.1.1.20180930T080756Z.753c49142579b043.b2798189b8760e7b357c9d23a8736ef0a54be481";
    }

    async translateThatText(word,lang)
    {
        const url = `https://translate.yandex.net/api/v1.5/tr.json/translate?key=${this.apiKey}&text=${word}&lang=${lang}`;

        const response = await fetch(url);

        const data = await response.json();

        return data.text[0];
    }
}