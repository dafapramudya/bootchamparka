using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

class VenMachine
{
	static void Main()
	{
		int kemb1, kemb2, kemb3, kemb4, kemb5, kemb6, kemb7, kemb8;

		int uangVM, totKemb, totBel;

		Console.Write("Masukan uang ke Vending Machine: ");
		uangVM = int.Parse(Console.ReadLine());
		Console.Write("Berapa uang total belanja anda?: ");
		totBel = int.Parse(Console.ReadLine());

		totKemb = uangVM - totBel;

		Console.WriteLine("Total uang kembalian anda adalah: " +totKemb);
		Console.WriteLine();
		Console.WriteLine("Jika dipecah akan menjadi: ");

		kemb1 = totKemb / 50000;
		kemb2 = (totKemb - (kemb1 * 50000)) / 20000;
	    kemb3 = (totKemb - ((kemb1 * 50000) + ( kemb2 * 20000))) / 10000;
	    kemb4 = (totKemb - ((kemb1 * 50000) + ( kemb2 * 20000) + (kemb3 * 10000))) / 5000;
	    kemb5 = (totKemb - ((kemb1 * 50000) + ( kemb2 * 20000) + (kemb3 * 10000) + ( kemb4 * 5000)))/2000;
	    kemb6 = (totKemb - ((kemb1 * 50000) + ( kemb2 * 20000) + (kemb3 * 10000) + ( kemb4 * 5000) + ( kemb5*2000)))/1000;
	    kemb7 = (totKemb - ((kemb1 * 50000) + ( kemb2 * 20000) + (kemb3 * 10000) + ( kemb4 * 5000) + ( kemb5*2000) + ( kemb6*1000)))/500;
	    kemb8 = (totKemb - ((kemb1 * 50000) + ( kemb2 * 20000) + (kemb3 * 10000) + ( kemb4 * 5000) + ( kemb5*2000) + ( kemb6*1000) + ( kemb7*500)))/100;

	    Console.WriteLine(kemb1 + " lembar uang 50000");
	    Console.WriteLine(kemb2 + " lembar uang 20000");
	    Console.WriteLine(kemb3 + " lembar uang 10000");
	    Console.WriteLine(kemb4 + " lembar uang 5000");
	    Console.WriteLine(kemb5 + " lembar uang 2000");
	    Console.WriteLine(kemb6 + " lembar uang 1000");
	    Console.WriteLine(kemb7 + " koin uang 500");
	    Console.WriteLine(kemb8 + " koin uang 100");

		Console.ReadLine();
	}
}