int employeeLevel = 100;
string employeeName = "John Smith";

string title = "";

switch (employeeLevel) {
    case 100:
    case 200:
        title = "Senior Associate";
        break;
    case 300:
        title = "Manager";
        break;
    case 400:
        title = "Senior Manager";
        break;
    default:
        title = "Associate";
        break;
}

Console.WriteLine($"{employeeName}, {title}");

// SKU = Stock Keeping Unit. 
// SKU value format: <product #>-<2-letter color code>-<size code>
string sku = "01-MN-L";

string[] product = sku.Split('-');

string type = "";
string color = "";
string size = "";

if (product[0] == "01") {
    type = "Sweat shirt";
} else if (product[0] == "02") {
    type = "T-Shirt";
} else if (product[0] == "03") {
    type = "Sweat pants"; 
} else {
    type = "Other";
}

if (product[1] == "BL") {
    color = "Black";
} else if (product[1] == "MN") {
    color = "Maroon";
} else {
    color = "White";
}

if (product[2] == "S") {
    size = "Small";
} else if (product[2] == "M") {
    size = "Medium";
} else if (product[2] == "L") {
    size = "Large";
} else {
    size = "One Size Fits All";
}

Console.WriteLine($"Product: {size} {color} {type}");

string[] names = { "Alex", "Eddie", "David", "Michael" };
for (int i = 0; i < names.Length; i++)
    if (names[i] == "David") names[i] = "Sammy";

foreach (var name in names) Console.WriteLine(name);

for (int i = 1; i < 101; i++) {
    if ((i % 3 == 0) && (i % 5 == 0))
        Console.WriteLine($"{i} - FizzBuzz");
     else if (i % 3 == 0)
        Console.WriteLine($"{i} - Fizz");
    else if (i % 5 == 0)
        Console.WriteLine($"{i} - Buzz");
    else
        Console.WriteLine($"{i}");
}