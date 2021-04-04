interface Debian {
    public String sayDeskEnvironment();
    public String apt();
}

interface ArchLinux {
    public String sayDeskEnvironment();
    public String pacman();
}

class DebianGnome implements Debian {
    public String sayDeskEnvironment(){
        return "I am Debian with Gnome!";
    }
    public String apt(){
        return "I use apt";
    }
}

class DebianKDEPlasma implements Debian {
    public String sayDeskEnvironment(){
        return "I am Debian with KDE Plasma!";
    }

    public String apt(){
        return "I use apt";
    }
}

class ArchLinuxGnome implements ArchLinux {
    public String sayDeskEnvironment(){
        return "I am ArchLinux with Gnome!";
    }

    public String pacman(){
        return "I use pacman";
    }
}

class ArchLinuxKDEPlasma implements ArchLinux {
    public String sayDeskEnvironment(){
        return "I am ArchLinux with KDE Plasma!";
    }

    public String pacman(){
        return "I use pacman";
    }
}

interface AbstractFactoryInterface {
    public Debian createDebianDist();
    public ArchLinux createArchDist();
}

class GnomeDistributions implements AbstractFactoryInterface {
    public Debian createDebianDist(){
        return new DebianGnome();
    }

    public ArchLinux createArchDist(){
        return new ArchLinuxGnome();
    }
}

class KDEPlasmaDistributions implements AbstractFactoryInterface {
    public Debian createDebianDist(){
        return new DebianKDEPlasma();
    }

    public ArchLinux createArchDist(){
        return new ArchLinuxKDEPlasma();
    }
}

class Client {
    private AbstractFactoryInterface factory = null;

    public Client(AbstractFactoryInterface f){
        this.factory = f;
    }

    public void someOperation(String deskEnv, String dist){
        if(deskEnv.equalsIgnoreCase("gnome") && dist.equalsIgnoreCase("debian")){
            Debian deb = this.factory.createDebianDist();
        }
    }
}

public class AbstractFactory {
    public static void main(String[] args) throws Exception {
        Client cli = new Client(f);
    }
}
