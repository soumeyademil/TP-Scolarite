package dz.tests.selenium;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;;

public class Test {

	public static void main(String[] args) throws InterruptedException {
		System.setProperty("webdriver.chrome.driver", "C:\\Selenium\\chromedriver.exe");
		WebDriver driver = new ChromeDriver();
		String at = "";
		try {
			driver.get("http://localhost:9000/reclamations/create");
			driver.manage().window().maximize();
			driver.findElement(By.name("mod")).sendKeys("igl");
			Thread.sleep(2000);
			driver.findElement(By.name("contenu")).sendKeys("ma reclamation est celle ci ..");
			Thread.sleep(2000);
			driver.findElement(By.id("envoyer")).click();
			at = driver.findElement(By.id("message")).getText();
		}
		catch(Exception e) {
			
		}
		finally {
			driver.close();
			if(at.equals("1")) System.out.println("Envoyé avec succes!");
			else System.out.println("Echec! vous devez remplir les deux champs.");
			
		}
	}

}
