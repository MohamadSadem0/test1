package com.example.Alert.Guard.entity;
import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

import java.security.Timestamp;

@Entity
@Table(name = "phone_data")
@Data
@AllArgsConstructor
@NoArgsConstructor
public class PhoneData {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long phoneId;
    private Timestamp timestamp;
    private String location;
    private byte[] soundData;
}
