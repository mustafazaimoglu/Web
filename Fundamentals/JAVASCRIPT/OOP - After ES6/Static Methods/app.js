// Static Methods

class Matematik
{
    square(x)
    {
        console.log(x*x);
    }

    static cube(x) // STATICLER CLASS A ÖZGÜ METHODLARDIR.
    {
        console.log(x*x*x);
    }
}

const m = new Matematik();

m.square(4);

Matematik.cube(4);

// Matematik.square(15); WON'T WORK CUZ SQUARE İS NOT A STATİC FUNC

console.log(Math.sqrt(16));