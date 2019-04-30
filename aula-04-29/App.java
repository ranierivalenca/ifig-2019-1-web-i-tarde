class No {
    String tag;

    public void imprimir() {
        System.out.println(this.tag);
    }
}

public class App {
    public static void main(String[] args) {
        No html = new No();
        html.tag = "html";

        html.imprimir();
    }
}