class DataSourceTemplate{
    public key: string;
    public sources: ISensorDataContainerTemplate[] = [];
    public grouptype: string;
    public layers: string[] = [];
}

interface ISensorDataContainerTemplate{
    name: string;
    key: string
}

let a = new DataSourceTemplate();

a.sources.push({ key: "SPEED", name: "telemetry"});
a.grouptype = "PointSensorGroup";

let kernel: any;


kernel.senMan.loadedDataSet[0].LoadedKeys

kernel.senMan.loadedDataSet[0].KeyInfoMap["SPEED"].SensorSet.Name